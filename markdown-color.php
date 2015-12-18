<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class MarkdownColorPlugin extends Plugin
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
            if (preg_match('/^{c:([#\w]\w+)}([^{]+){\/c}/', $excerpt['text'], $matches))
            {
                return array(
                    'extent' => strlen($matches[0]),
                    'element' => array(
                        'name' => 'span',
                        'text' => $matches[2],
                        'attributes' => array(
                            'style' => 'color: '.$matches[1],
                        ),
                    ),
                );
            }
        };
    }
}