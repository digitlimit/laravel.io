<?php

if (! function_exists('active')) {
    /**
     * Sets the menu item class for an active route.
     */
    function active(mixed $routes, bool $condition = true): string
    {
        return call_user_func_array([app('router'), 'is'], (array) $routes) && $condition ? 'active' : '';
    }
}

if (! function_exists('is_active')) {
    /**
     * Determines if the given routes are active.
     */
    function is_active(mixed $routes): bool
    {
        return (bool) call_user_func_array([app('router'), 'is'], (array) $routes);
    }
}

if (! function_exists('md_to_html')) {
    /**
     * Converts Markdown to a safe HTML string.
     */
    function md_to_html(string $markdown, bool $nofollow = true): string
    {
        return app(App\Markdown\Converter::class, ['nofollow' => $nofollow])->toHtml($markdown);
    }
}

if (! function_exists('route_to_reply_able')) {
    /**
     * Returns the route for the replyAble.
     */
    function route_to_reply_able(mixed $replyAble): string
    {
        if ($replyAble instanceof App\Models\Thread) {
            return route('thread', $replyAble->slug());
        }
    }
}

if (! function_exists('canonical')) {
    /**
     * Generate a canonical URL to the given route and allowed list of query params.
     */
    function canonical(string $route, array $params = []): string
    {
        $page = app('request')->get('page');
        $params = array_merge($params, ['page' => $page != 1 ? $page : null]);

        ksort($params);

        return route($route, $params);
    }
}
