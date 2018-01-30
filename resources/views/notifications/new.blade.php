<h3>New notification</h3>

<?php
echo '</br>';
echo '</br>';
echo Form::open(['action' => 'NotificationController@add']);

echo Form::label('name', 'Name', ['class' => '']);
echo Form::text('name');
echo '</br>';
echo '</br>';

echo Form::label('date', 'date', ['class' => '']);
echo Form::date('date', \Carbon\Carbon::now());
echo '</br>';
echo '</br>';

echo Form::label('repear', 'repeat', ['class' => '']);
echo Form::number('repeat', 'value');
echo '</br>';
echo '</br>';

echo Form::submit('Save');
