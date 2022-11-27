<?php

namespace Tests\Unit\Services;

use App\Services\SlugService;
use PHPUnit\Framework\TestCase;

class SlugServiceTest extends TestCase
{
    private const EXPECTED_SLUGS = [
        'Odit enim et est.' => 'odit-enim-et-est',
        'Sit aliquam delectus exercitationem ea eveniet voluptas sunt.' => 'sit-aliquam-delectus-exercitationem-ea-eveniet-voluptas-sunt',
        'Illo debitis dignissimos qui corrupti occaecati. Sed et sunt accusamus facere delectus reprehenderit. Nulla doloremque dolor fugit sunt fugit. Molestiae vero doloribus quod architecto expedita.' => 'illo-debitis-dignissimos-qui-corrupti-occaecati-sed-et-sunt'
    ];
    public function testCreateSlugs()
    {
        $slugService = new SlugService();
        foreach (self::EXPECTED_SLUGS as $title => $expectedSlug) {
            $this->assertEquals($slugService->createSlug($title), $expectedSlug);
        }
    }
}
