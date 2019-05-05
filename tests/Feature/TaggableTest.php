<?php

namespace Tests\Feature;

use App\Concert;
use Illuminate\Support\Facades\Artisan;
use phpDocumentor\Reflection\DocBlock\Tag;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaggableTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEmptyTags()
    {
        $concert = factory(Concert::class)->create();
        $concert->saveTags('');
        $this->assertEquals(0, Tag::count());
    }

    public function testReuseTags(){
        $concerts = factory(Concert::class, 2)->create();
        $concert1 = $concerts->first();
        $concert2 = $concerts->last();
        $concert1->saveTags('salut,test,essai');
        $concert2->saveTags('salut,test1');
        $this->assertEquals(4, Tag::count());
        $this->assertEquals(3, DB::table('post_tags')->where('concert_id', $concert1->id)->count());
        $this->assertEquals(2, DB::table('post_tags')->where('concert_id', $concert2->id)->count());



    }
}
