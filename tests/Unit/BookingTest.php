<?php

namespace Tests\Unit;
use Tests\TestCase;


class BookingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     /* 
        Testing all Guest methods
    */
    public function test_if_method_get_guests_works_good()
    {
        $response = $this->get(route('guest.index'));
        $response->assertStatus(200);
    }

    public function test_if_method_post_guest_works_correctly()
    {

    }

     /* 
        Testing all rooms methods
    */
    public function test_if_method_get_rooms_works_good() 
    {
        $response = $this->get(route('rooms.index'));
        $response->assertStatus(200);
    }

    public function test_if_method_post_rooms_works_correctly()
    {
    
    }
     /* 
        Testing all Booking methods
    */

    public function test_if_method_get_booking_works_good()
    {
        $response = $this->get(route('bookings.index'));
        $response->assertStatus(200);
    }

    public function test_if_method_post_bookings_works_correctly()
    {
        
    }
}
