<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";

<?php
header("Content-type: text/xml");
print("");
$string = <<<XML
<ol>
	<li>
		<definition>
			Definition = a statement of the exact meaning of a word, especially in a dictionary.
		</definition>
		<author>
		    <strong> Author: Rishi </strong>
		</author>
		<example>
		    <em> Example: Definitions are the definitions of words</em>
		</example>
	</li>
	<li>
		<definition>
			Bar = a place that sells alcholic beverages.
		</definition>
		<author>
		    <strong> Author: Cat </strong>
		</author>
		<example>
		    <em> Example: I drink at bars</em>
		</example>
	</li>
	<li>
		<definition>
			Ajax = technique which involves the use of javascript and xml.
		</definition>
		<author>
		    <strong> Author: Dog </strong>
		</author>
		<example>
		    <em> Example: I code in ajax</em>
		</example>
	</li>
  </ol>
XML;
$xml = new SimpleXMLElement($string);
echo $xml->asXML();
?>
