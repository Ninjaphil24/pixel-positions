<?php

use App\Models\Jobs;
use App\Models\Employer;

it('belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $jobs = Jobs::factory()->create(['employer_id' => $employer->id]);
    // Act & Assert
    expect($jobs->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    // Arrange
    $jobs = Jobs::factory()->create();
    // Act
    $jobs->tag('Frontend');
    // Assert
    expect($jobs->tags)->toHaveCount(1);
});
