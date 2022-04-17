
![Logo](https://laravel.com/img/logotype.min.svg)

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)
# Lorem Picsum API Integration

Did you desperately need a simple Laravel random image generator? No? Well, now you do!
## Note

This package was created on Laravel version 8 and is currently untested on older versions, please let me know if you encounter issues with those.


## Installation

Install the package with Composer

```bash
  composer require sim1dev/larapicsum
```
    
## Usage/Examples

```php
use Sim1dev\Larapicsum\Larapicsum;

//Get image as base64

$pic = new Larapicsum();
$pic->setWidth(1920);
$pic->setHeight(1080);
$pic->setGrayScale(1);
$pic->setBlur(4);
$pic->setSeed("i4Opv540Z3wq");
$pic->setFormat('webp');
return $pic->base64();


//Get image URL

$pic = new Larapicsum(400, 600, 1, 4, "webp", "test");
return $pic->url(); //"https://picsum.photos/seed/test/400/600?grayscale=1&blur=4.webp"

//Get Default Larapicsum Object
return new Larapicsum(); //{"width":300,"height":200,"grayscale":0,"blur":0,"format":"jpeg","seed":"","url":"https://picsum.photos/300/200?grayscale=0&blur=0.jpeg"}

```


## Larapicsum Object Properties

- string Seed - The seed of your image, using a specific seed will ensure you to always get the same image
- string Format - The format/extension of your image (default: "jpeg")
- number Width - The width of your image (px)
- number Height - The height of your image (px)
- number Grayscale (0/1) - Enables/Disables Grayscale for your image (API also supports higher numbers, but as now they don't differ at all from grayscale = 1)
- number Blur (0/10) - The amount of blur of your image (amount*10%, example: blur = 4, final blur amount = 40%)

## License

[MIT](https://choosealicense.com/licenses/mit/)


## Author

- [@sim1-dev](https://github.com/sim1-dev) 


## Buy [me](https://www.simonetenisci.it/) a coffee ☕

[![alt text][image]][hyperlink]

[hyperlink]:https://www.paypal.com/donate/?hosted_button_id=AS2MJZNHSQEQA
[image]:https://pics.paypal.com/00/s/NDI2ZTExZWQtODY4MS00ZTZiLTg4OGEtZjc1MmEyNjYwNzRj/file.PNG
(Donate with PayPal)