<?php

namespace Tests\Feature\Dashboard\Owner;

use App\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\Feature\Dashboard\CreateUser;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;
    use CreateUser;
    use AdditionalAssertions;

    protected function getUserType()
    {
        return 'owner';
    }

    public function test_owner_cannot_view_service_creation_without_company()
    {
        $response = $this->get(route('dashboard.owner.services.create', [], false));
        $response->assertForbidden();
    }

    public function test_owner_can_view_service_creation_with_company()
    {
        factory(Company::class)->state('service')->create(['creator_id' => $this->user->id]);
        $response = $this->get(route('dashboard.owner.services.create', [], false));
        $response->assertSuccessful();
        $response->assertViewIs('dashboard.owner.services.create');
    }
}