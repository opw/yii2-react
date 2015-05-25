<?php

/**
 *  @copyright Copyright &copy; Mobilizy Ltda., mobilizy.com.br 2015
 *  @package opw/yii2-react
 *  @version 1.0.0
 */

namespace opw\react;

use yii\web\AssetBundle;

/**
 * Asset bundle for the react.js files.
 *
 * @author Paulo Santiago <paulo@mobilizy.com.br>
 * @since 0.0.1
 * @see
 */
class JSXTransformerAsset extends AssetBundle {

  public $sourcePath = '@bower/react';
  public $css = [
  ];
  public $js = [
      'JSXTransformer.js'
  ];
  public $depends = [
      'opw\react\ReactAsset'
  ];

}
