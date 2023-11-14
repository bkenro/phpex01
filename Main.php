<?php

/**
 * @file
 * メインプログラム.
 */

include 'NamePrintableInterface.php';
include 'AgePrintableInterface.php';
include 'Whisky.php';
include 'Book.php';
include 'Person.php';

main1(new Book('詳解!Drupal入門'));
main2(new Whisky(10));
main3(new Person('山田太郎', 30));

/**
 * 名前を表示できるものを前提にしたメイン処理.
 */
function main1(NamePrintableInterface $subject) {
  $subject->printName();
}

/**
 * 年齢を表示できるものを前提にしたメイン処理.
 */
function main2(AgePrintableInterface $subject) {
  $subject->printAge();
}

/**
 * 人を前提にしたメイン処理.
 */
function main3(Person $subject) {
  $subject->printName();
  $subject->printAge();
}
