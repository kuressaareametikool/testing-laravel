<?php

it('has index page')
    ->get('/')
    ->assertStatus(200);

it('has home navigation', function (){
   $this->view('index')->assertSee('Home');
});

it('has services navigation', function (){
   $this->view('index')->assertSee('Services');
});

it('has contacts navigation', function (){
   $this->view('index')->assertSee('Contacts');
});

