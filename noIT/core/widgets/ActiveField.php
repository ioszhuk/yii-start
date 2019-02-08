<?php

namespace noIT\core\widgets;

use kartik\popover\PopoverX;
use yii\helpers\Html;

class ActiveField extends \yii\widgets\ActiveField {
    public $template = "{label}&nbsp;{help}\n{input}\n{hint}\n{error}";

    public function help($content = null, $title = null, $options = [])
    {
        if (empty($content)) {
            $this->parts['{help}'] = '';

            return $this;
        }

        if (empty($title)) {
            $title = \Yii::t('app', 'Подсказка');
        }

        $this->parts['{help}'] = PopoverX::widget([
            'header' => $title,
            'placement' => PopoverX::ALIGN_AUTO,
            'content' => $content,
            'toggleButton' => ['label'=>'?', 'class'=>'btn'],
        ]);

        return $this;
    }

    /**
     * Renders the whole field.
     * This method will generate the label, error tag, input tag and hint tag (if any), and
     * assemble them into HTML according to [[template]].
     * @param string|callable $content the content within the field container.
     * If `null` (not set), the default methods will be called to generate the label, error tag and input tag,
     * and use them as the content.
     * If a callable, it will be called to generate the content. The signature of the callable should be:
     *
     * ```php
     * function ($field) {
     *     return $html;
     * }
     * ```
     *
     * @return string the rendering result.
     */
    public function render($content = null)
    {
        if ($content === null) {
            if (!isset($this->parts['{input}'])) {
                $this->textInput();
            }
            if (!isset($this->parts['{label}'])) {
                $this->label();
            }
            if (!isset($this->parts['{help}'])) {
                $this->help();
            }
            if (!isset($this->parts['{error}'])) {
                $this->error();
            }
            if (!isset($this->parts['{hint}'])) {
                $this->hint(null);
            }
            $content = strtr($this->template, $this->parts);
        } elseif (!is_string($content)) {
            $content = call_user_func($content, $this);
        }

        return $this->begin() . "\n" . $content . "\n" . $this->end();
    }
}