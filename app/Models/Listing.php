<?php 
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
            'id' => 1,
            'title' => 'Listing 1',
            'description' => 'A description of my listing'
        ],
        [
            'id' => 2,
            'title' => 'Listing 2',
            'description' => 'A description of my listing'
        ],
        [
            'id' => 3,
            'title' => 'Listing 3',
            'description' => 'A description of my listing'
        ],
      ];
    }

    public static function find($id) {
      $listings = self::all();

      foreach($listings as $listing) {
        if($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }
?>