<?php

namespace Tests\Unit;
use Illuminate\foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class BookingTest extends TestCase
{

    use RefreshDatabase;
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
    


    public function test_if_method_post_guest_works_correclty()
    {
        $response = $this->post(route('guest.post'), ['first_name'=>'Julio', 'last_name'=> 'Enriquez', 'email_address'=>'enriquez@gmail.com', 'phone'=>'2349809']);
        $response->assertStatus(201);
    }

     /* 
        Testing all rooms methods
    */
    public function test_if_method_get_rooms_works_good() 
    {
        $response = $this->get(route('rooms.index'));
        $response->assertStatus(200);
    }


    public function test_if_method_post_rooms_works_correclty()
    {
        $response = $this->post(route('rooms.post'), ['room_type'=>'familiar', 'price_per_night'=>'180', 'description'=>'Enjoy our elegantguest rooms double bed', 'breakfast'=>'included', 'status'=>'available']);
        $response->assertStatus(201);
    }
     /* 
        Testing all Booking methods
    */

    public function test_if_method_get_booking_works_good()
    {
        $response = $this->get(route('bookings.index'));
        $response->assertStatus(200);
    }

}
