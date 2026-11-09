<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test the landing page renders correctly with all key components and data.
     */
    public function test_landing_page_renders_successfully_with_key_data(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        // Assert Brand & Name
        $response->assertSee('MULTAZAM JADID AT THARIQ');
        $response->assertSee('KBIHU');

        // Assert Official Partnership with PT Khairah Berkah Mandiri
        $response->assertSee('PT Khairah Berkah Mandiri');

        // Assert Certified Mentors
        $response->assertSee('H. Mohammad Shodiq, M.Pd.I');
        $response->assertSee('Hj. Ayani, S.Pd.I');
        $response->assertSee('Sertifikat Pembimbing Ibadah Haji Kemenag RI');

        // Assert Organization Team Members
        $response->assertSee('Yudi Azhari');
        $response->assertSee('Amrun Tajdid, S.T');
        $response->assertSee('Della Shafira Azhari, S.AP');
        $response->assertSee('Thariq Fitratullah');

        // Assert Contact & Office Address
        $response->assertSee('+62 813-1577-0146');
        $response->assertSee('Pulogebang, Cakung, Jakarta Timur');

        // Assert Assets
        $response->assertSee('images/logo.png');
        $response->assertSee('images/struktur-organisasi.jpg');
    }
}
