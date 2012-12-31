<?php

/**
 * @method static bool guest() Determine if the user of the application is not logged in.
 * @method static bool check() Determine if the user is logged in.
 * @method static User|null user() Get the current user of the application.
 * @method static User|null retrieve(int $id) Get the a given application user by ID.
 * @method static bool attempt(array $arguments) Attempt to log a user into the application.
 * @method static bool login(mixed $token,bool $remember = false) Login the user assigned to the given token.
 * @method static logout() Log the user out of the driver's auth context.
 * @method static store(string $token) Store a user's token in the session.
 * @method static remember(string $token) Store a user's token in a long-lived cookie.
 * @method static string|null recall() Attempt to find a "remember me" cookie for the user.
 * @method static cookie(string $name, string $value, int $minutes) Store an authentication cookie.
 * @method static string token() Get session key name used to store the token.
 * @method static string name() Get the name of the driver in a storage friendly format.
 */
class Auth extends Illuminate\Support\Facades\Auth {}

/**
 * @method static add(string $name, string $source, array $dependencies = array(), array $attributes = array())
 * @method static string styles()
 * @method static string scripts()
 */
class Artisan extends Illuminate\Support\Facades\Artisan {}

/**
 * @method static boolean has(string $key) Determine if an item exists in the cache
 * @method static mixed get(string $key, $default = null) Get an item from the cache
 * @method static put(string $key, $value, $minutes) Write an item to the cache for a given number of minutes
 * @method static mixed remember($key, $default, $minutes, $function = 'put') Get an item from the cache, or cache and return the default value
 * @method static forever(string $key, $value) Write an item to the cache for five years
 * @method static forget(string $key) Delete an item from the cache
 * @method static sear(string $key, $default) Get an item from the cache, or cache the default value forever
 */
class Cache extends Illuminate\Support\Facades\Cache {}
class Config extends Illuminate\Support\Facades\Config {}
class Controller extends Illuminate\Routing\Controllers\Controller {}
class Cookie extends Illuminate\Support\Facades\Cookie {}
class Crypt extends Illuminate\Support\Facades\Crypt {}

/**
 * @method static array query(string $sql, array $bindings = array()) Execute a SQL query and return an array of StdClass objects.
 * @method static transaction(Closure $callback) Execute a callback wrapped in a database transaction.
 */
class DB extends Illuminate\Support\Facades\DB {}

/**
 * @method static array lists(string $name, string $key = null)
 * @method static \Illuminate\Database\Query\Builder where(string $column, string $operator = null, mixed $value = null, string $connector = 'AND')
 * @method static \Illuminate\Database\Query\Builder where_in(string $column, array $values, string $connector = 'AND', boolean $not = false)
 * @method static \Illuminate\Database\Query\Builder with(string $column)
 * @method static \Illuminate\Database\Query\Builder order_by(string $column, string $direction = 'asc')
 * @method static \Illuminate\Database\Query\Builder take(int $value)
 * @method static \Illuminate\Database\Query\Builder select(array $columns = array('*'))
 * @method static Eloquent find($id)
 * @method static int count()
 *
 * @property $created_at
 * @property $updated_at
 */
class Eloquent extends  Illuminate\Database\Eloquent\Model {}
class Event extends Illuminate\Support\Facades\Event {}
class File extends Illuminate\Support\Facades\File {}
class Hash extends Illuminate\Support\Facades\Hash {}
class Input extends Illuminate\Support\Facades\Input {}
class Lang extends Illuminate\Support\Facades\Lang {}

/**
 * @method static void warning(string $message)
 * @method static void error(string $message)
 * @method static void info(string $message)
 */
class Log extends Illuminate\Support\Facades\Log {}
class Mail extends Illuminate\Support\Facades\Mail {}
class Paginator extends Illuminate\Support\Facades\Paginator {}
class Redirect extends Illuminate\Support\Facades\Redirect {}
class Redis extends Illuminate\Support\Facades\Redis {}
class Request extends Illuminate\Support\Facades\Request {}
class Response extends Illuminate\Support\Facades\Response {}
class Route extends Illuminate\Support\Facades\Route {}
class Schema extends Illuminate\Support\Facades\Schema {}


/**
 * @method static boolean has(string $key)
 * @method static get(string $key, $default = null)
 * @method static put(string $key, $value)
 * @method static flash(string $key, $value)
 * @method static forget(string $key)
 * @method static reflash()
 * @method static flush()
 */
class Session extends Illuminate\Support\Facades\Session {}
class URL extends Illuminate\Support\Facades\URL {}
class Validator extends Illuminate\Support\Facades\Validator {}
class View extends Illuminate\Support\Facades\View {}