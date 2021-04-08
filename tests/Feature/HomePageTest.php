<?php

it('has index page')
    ->get('/')
    ->assertStatus(200);

it('has home navigation', function (){
   $this->view('index')->assertSee('<a href="/">Home</a>', false);
});

it('has services navigation', function (){
   $this->view('index')->assertSee('<a href="/services">Services</a>', false);
});

it('has contacts navigation', function (){
   $this->view('index')->assertSee('<a href="/contacts">Contacts</a>', false);
});

