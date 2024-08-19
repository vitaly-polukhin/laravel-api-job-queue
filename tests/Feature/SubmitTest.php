<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmitTest extends TestCase
{
    use RefreshDatabase;

    public function test_submit_endpoint_with_valid_data()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);

        $response->assertStatus(200)->assertJson([
            'message' => 'Submission is being processed.',
        ]);
    }

    public function test_submit_endpoint_with_invalid_data()
    {
        $response = $this->postJson('/api/submit', [
            'email' => 'invalid-email',
        ]);

        $response->assertStatus(422);
    }
}
