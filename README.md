# Readme

## SeAT-PI
Provides more detailed information on a character's planetary interaction data. 
As of now this is only done via an API call but will add in a separate page in future releases.


[![Latest Stable Version](https://img.shields.io/packagist/v/raykazi/seat-pi?style=for-the-badge)](https://packagist.org/packages/raykazi/seat-pi)
[![Downloads](https://img.shields.io/packagist/dt/raykazi/seat-pi?style=for-the-badge)](https://packagist.org/packages/raykazi/seat-pi)
[![License](https://img.shields.io/github/license/raykazi/seat-pi?style=for-the-badge)](https://github.com/raykazi/seat-pi/blob/master/LICENSE)

[//]: # ([![Maintainability]&#40;https://img.shields.io/codeclimate/maintainability/raykazi/seat-pi?style=for-the-badge&#41;]&#40;https://codeclimate.com/github/raykazi/seat-pi/maintainability&#41;)

## Installation

This plugin using `composer require raykazi/seat-pi --update-no-dev`

## API Example
You would need to call the following URL `https://yourseatdomain.com/api/v2/seat-pi/planets/<character id>`

```      
{
  "data": [
    {
      "planet_name": "49-U6U I",
      "region": "Querious",
      "planet_type": "lava",
      "num_pins": 12,
      "planet_id": 40253780,
      "solar_system_id": 30004009,
      "upgrade_level": 4,
      "extractors": [
        {
          "character_id": 94857788,
          "planet_id": 40253780,
          "pin_id": 1036171075942,
          "product_type_id": 2308,
          "product_name": "Suspended Plasma",
          "cycle_time": 1800,
          "head_radius": 0.02,
          "qty_per_cycle": 6957,
          "pin": {
            "character_id": 94857788,
            "planet_id": 40253780,
            "pin_id": 1036171075942,
            "type_id": 3062,
            "schematic_id": null,
            "latitude": 1.98,
            "longitude": 1.3599999999999999,
            "install_time": "2021-07-05 21:20:21",
            "expiry_time": "2021-07-07 21:20:21",
            "last_cycle_start": "2021-07-05 21:20:21",
            "created_at": "2024-06-06T23:00:03.000000Z",
            "updated_at": "2024-06-17T10:22:11.000000Z"
          }
        }
      ]
    },
    {
      "planet_name": "49-U6U VIII",
      "region": "Querious",
      "planet_type": "gas",
      "num_pins": 10,
      "planet_id": 40253806,
      "solar_system_id": 30004009,
      "upgrade_level": 4,
      "extractors": [
        {
          "character_id": 94857788,
          "planet_id": 40253806,
          "pin_id": 1036474397046,
          "product_type_id": 2268,
          "product_name": "Aqueous Liquids",
          "cycle_time": 1800,
          "head_radius": 0.02,
          "qty_per_cycle": 10705,
          "pin": {
            "character_id": 94857788,
            "planet_id": 40253806,
            "pin_id": 1036474397046,
            "type_id": 3060,
            "schematic_id": null,
            "latitude": 1.2,
            "longitude": 1.24,
            "install_time": "2021-07-05 21:23:00",
            "expiry_time": "2021-07-07 21:23:00",
            "last_cycle_start": "2021-07-05 21:23:00",
            "created_at": "2024-06-06T23:00:14.000000Z",
            "updated_at": "2024-06-17T10:22:12.000000Z"
          }
        }
      ]
    }
  ],
  "links": {
    "first": "https://devseat.windrammers.com/api/v2/seat-pi/planets/94857788?page=1",
    "last": "https://devseat.windrammers.com/api/v2/seat-pi/planets/94857788?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://devseat.windrammers.com/api/v2/seat-pi/planets/94857788",
    "per_page": 15,
    "to": 5,
    "total": 2
  }
}    
```