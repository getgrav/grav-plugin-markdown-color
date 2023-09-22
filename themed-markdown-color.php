<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class ThemedMarkdownColorPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onMarkdownInitialized' => ['onMarkdownInitialized', 0]
        ];
    }

    public function onMarkdownInitialized(Event $event)
    {
        $markdown = $event['markdown'];

        // Initialize Text example
        $markdown->addInlineType('{', 'ColoredText');

        // Add function to handle this
        $markdown->inlineColoredText = function($excerpt) {
            // handling of foreground color
            if (preg_match('/^{theme:(\w+)}([^{]+){\/theme}/', $excerpt['text'], $matches))
            {
                $c = $this->config->get('plugins.themed-markdown-color.theme-' . $matches[1]);
                if (!is_null($c))
                    return array(
                        'extent' => strlen($matches[0]),
                        'element' => array(
                            'name' => 'span',
                            'text' => $matches[2],
                            'attributes' => array(
                                'style' => 'color: '.$c
                            ),
                        ),
                    );
            }

            // handling of background colors with either white or black text
            if (preg_match('/^{bgtheme:(\w+)-([bw]{1})}([^{]+){\/bgtheme}/', $excerpt['text'], $matches))
            {
                $c = $this->config->get('plugins.markdown-color.theme-' . $matches[1]);
                if (!is_null($c)) {
                    $f = $matches[2] == 'b' ? '#000' : '#fff';
                    return array(
                        'extent' => strlen($matches[0]),
                        'element' => array(
                            'name' => 'span',
                            'text' => $matches[3],
                            'attributes' => array(
                                'style' => 'background-color: '. $c . '; color: ' . $f
                            ),
                        ),
                    );
                }
            }
        };
    }
}