<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CustomerTableSeeder');
		$this->call('EntityTableSeeder');
		$this->call('ReservationTableSeeder');
	}

}