<?php
  class DataFile implements JsonSerializable {
    public
    $server = null,
    $name = null,
    $lastModified = null,
    $tps = null,
    $errors = null,
    $sample = null,
    $concurrency = null;

    public function __construct($server, $name) {
      $this->server = $server;
      if (file_exists($name)) {
        $this->name = $this->parseName($name);
        $this->sample = $this->parseSample($this->name);
        $this->concurrency = $this->parseConcurrency($this->name);
        $this->lastModified = $this->parseLastModified($name);
        $this->tps = $this->parseTPS($name);
        $this->errors = $this->parseErrors($name);
      }
    }

    public function getServer() {
      return $this->server;
    }

    public function getName() {
      return $this->name;
    }

    public function getSampleNumber() {
      return $this->sample;
    }

    public function getConcurrency() {
      return $this->concurrency;
    }

    public function getTPS() {
      return $this->tps;
    }

    public function getErrors() {
      return $this->errors;
    }

    public function getLastModified() {
      return $this->lastModified;
    }

    private function parseSample($name) {
      return str_replace(".txt", "", explode("-", $name)[2]);
    }

    private function parseConcurrency($name) {
      return explode("-", $name)[1];
    }

    private function parseName($name) {
      $pName = explode("/", $name);
      return $pName[sizeof($pName)-1];
    }

    private function parseLastModified($name) {
      return date("F d Y H:i:s.", filemtime($name));
    }

    private function parseTPS($name) {
      $lines_array = file($name);
      $search_string = "Requests per second:";
      foreach($lines_array as $line) {
        if(strpos($line, $search_string) !== false) {
          list(, $new_str) = explode(":", $line);
        }
      }
      return explode(" ", trim($new_str))[0];
    }

    public function parseErrors() {
      return "Not Implemented";
    }

    public function jsonSerialize() {
      return [
        'server' => $this->server,
        'name' => $this->name,
        'concurrency' => $this->concurrency,
        'sample' => $this->sample,
        'tps' => $this->tps,
        'errors' => $this->errors,
        'lastModified' => $this->lastModified
      ];
    }
  }
?>
