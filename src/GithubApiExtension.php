<?php namespace Anomaly\GithubApiExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class GithubApiExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\GithubApiExtension
 */
class GithubApiExtension extends Extension
{

    /**
     * This extension simply loads the GitHub API
     * library for use in the Streams Platform.
     *
     * @var null
     */
    protected $provides = null;

}
