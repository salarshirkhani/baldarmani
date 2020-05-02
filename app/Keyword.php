<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Keyword
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Keyword whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Keyword extends Model
{
    protected $table = 'keywords';

    protected $fillable = ['name', 'type'];

    public static function syncKeywords(array $names, $type) {
        $existing_keywords = self::whereIn('name', $names)->where('type', $type)->get();
        $new_keywords = $names;
        foreach ($existing_keywords as $keyword) {
            unset($new_keywords[array_search($keyword->name, $new_keywords)]);
        }

        $rows = [];
        foreach ($new_keywords as $name) {
            $rows[] = [
                'name' => $name,
                'type' => $type
            ];
        }

        self::insert($rows);

        return self::whereIn('name', $names)->where('type', $type)->get();
    }
}