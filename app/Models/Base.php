<?php
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Eloquent {
  use SoftDeletes;

  public function scopePublished($query) {
    $query->where('published', '=', '1');
  }

  public function getCreatedAtAttribute($value) {
    $date = strtotime($value);
    return date(DATE_ISO8601, $date);
  }

  public function getUpdatedAtAttribute($value) {
    $date = strtotime($value);
    return date(DATE_ISO8601, $date);
  }

  public function getadddateAttribute($value) {
    $date = strtotime($value);
    return date(DATE_ISO8601, $date);
  }

  public function getupddateAttribute($value) {
    $date = strtotime($value);
    return date(DATE_ISO8601, $date);
  }
}
