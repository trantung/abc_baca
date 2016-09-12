<?php

class BlockTableSeeder extends Seeder {

	public function run()
	{
		Block::create([
				'name' => 'Real Estate ',
				'name2' => 'Appraisal',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'How Home ',
				'name2' => 'Appraisals Work',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'Appraisal ',
				'name2' => 'Tips',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'Welcome ',
				'name2' => 'to Our Company!',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		Block::create([
				'name' => 'About ',
				'name2' => 'Our Company',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		Block::create([
				'name' => 'Our ',
				'name2' => 'Services',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		
	}

}