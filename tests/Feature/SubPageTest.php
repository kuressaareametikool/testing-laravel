<?php

it('has services page')
    ->get('/services')
    ->assertStatus(200);

it('has services heading', function (){
    $this->view('services')->assertSee('<h1>Services</h1>', false);
});

it('has contacts page')
    ->get('/contacts')
    ->assertStatus(200);

it('has contacts heading', function (){
    $this->view('contacts')->assertSee('<h1>Contacts</h1>', false);
});

