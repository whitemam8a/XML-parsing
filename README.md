# Description

This PHP code is designed to load an XML file with questions and answers, format its contents, and display it on a web page as a list of questions and corresponding answers.

## Dependencies

This code requires PHP to execute. It uses the built-in SimpleXML library to process XML data.

## Installation and Usage

1. Save the `test.xml` file in the same directory where this `index.php` file is located.
2. Open the `index.php` file in a browser to see the formatted list of questions and answers.

## XML file format

The XML file should have the following structure:

```XML
<?xml version="1.0" standalone="yes"?>
<test>
    <question id="1">
        <name>First question</name>
        <answer id="1">First answer to question 1</answer>
        <answer id="2">Second answer to question 1</answer>
    </question>
    <question id="2">
        <name>Second question</name>
        <answer id="1">First answer to question 2</answer>
        <answer id="2">Second answer to question 2</answer>
    </question>
</test>
