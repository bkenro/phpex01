<?php

/**
 * 熟成年数を表示できるウイスキー.
 */
class Whisky implements AgePrintableInterface {

  /**
   * このウイスキーの熟成年数.
   *
   * @var int
   */
  private $age = 0;

  /**
   * インスタンス生成時にフィールド値を初期設定する.
   *
   * @param int $age
   *   Age of this whisky.
   */
  public function __construct(int $age) {
    $this->age = $age;
  }

  /**
   * 熟成年数を表示する.
   */
  public function printAge() {
    print $this->age . '年モノです' . PHP_EOL;
  }

}
