<?php

/**
 * 書名を表示できる本.
 */
class Book implements NamePrintableInterface {

  /**
   * 本のタイトル.
   *
   * @var string
   */
  private $title = 'なし';

  /**
   * インスタンス生成時にフィールド値を初期設定する.
   *
   * @param string $title
   *   Title of this book.
   */
  public function __construct(string $title) {
    $this->title = $title;
  }

  /**
   * 本の名前を表示する.
   */
  public function printName() {
    print '書名：' . $this->title . PHP_EOL;
  }

}
