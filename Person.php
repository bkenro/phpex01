<?php

/**
 * 名前と年齢を表示できる人.
 */
class Person implements NamePrintableInterface, AgePrintableInterface {

  /**
   * この人の名前.
   *
   * @var string
   */
  private $name = 'なし';

  /**
   * この人の年齢.
   *
   * @var int
   */
  private $age = 0;

  /**
   * インスタンス生成時にフィールド値を初期設定する.
   *
   * @param string $name
   *   Name of this person.
   * @param int $age
   *   Age of this person.
   */
  public function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age = $age;
  }

  /**
   * 名前を表示する.
   */
  public function printName() {
    print $this->name . 'と申します。' . PHP_EOL;
  }

  /**
   * 年齢を表示する.
   */
  public function printAge() {
    print $this->age . '歳です。' . PHP_EOL;
  }

}
