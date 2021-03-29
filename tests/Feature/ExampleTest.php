<?php

it('has home')
    ->get('/')
    ->assertSee('Hello World');

