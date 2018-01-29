new notification

<?php

echo Form::open(['action' => 'NotificationController@add']);

echo Form::label('name', 'Name', ['class' => '']);
echo Form::text('name');

echo Form::label('date', 'date', ['class' => '']);
echo Form::date('date', \Carbon\Carbon::now());

echo Form::label('repear', 'repeat', ['class' => '']);
echo Form::number('repeat', 'value');


echo Form::submit('Save');
