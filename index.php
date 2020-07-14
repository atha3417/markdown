<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php
require_once 'vendor/autoload.php';

$parsedown = new Parsedown();

$text = "
# Markdown

## Contoh markdown _Code_

```
<?php
	var_dump(`);
 	echo 'Tes';
?>
```

## Contoh markdown _Link_

[sekolah koding](http://sekolahkoding.com/ 'Web sekolah koding')

## Contoh markdown _Image_

![Logo sekolah koding](img/logo.png)
";

echo $parsedown->text($text);
