// $Id: README.txt,v 1.1.2.1 2008/10/23 12:56:10 jmiccolis Exp $

CONTENTS OF THIS FILE
---------------------

* Introduction 
* Installation 
* API


INTRODUCTION 
------------

Authors: 
* Jeff Miccolis (jmiccolis)

Support was provided by Development Seed and the New America Foundation.

Flot is a javascript graphing library written using the jquery that we all know
and love. This module is designed to make it dead-simple to push data into a
flot graph.


INSTALLATION
------------

1. Copy the flot module directory to your sites/SITENAME/modules directory.

2. Download flot from http://code.google.com/p/flot/

3. Extract it as a sub-directory called 'flot' in the flot module folder. For
example:

 /sites/all/modules/flot/flot/

4. Enable the module at Administer >> Site building >> Modules.


API
---

The main API function is a theme function - theme_flot_graph(). It is designed
to mimic the main $.plot() function that flot provides. Think of it as a php
wrapper. It takes the same arguments in the same order as $.plot and returns
the placeholder element that flot will use to make it's graph. Please refer to
API.txt included in the flot package for more details on how to make flot work.
