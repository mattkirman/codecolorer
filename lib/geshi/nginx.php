<?php
/*************************************************************************************
 * nginx.php
 * -----
 * Author: Cliff Wells
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'nginx',
	'COMMENT_SINGLE' => array(1 => '#'),
	'COMMENT_MULTI' => array(),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
			    1 => array( // core module
				       'daemon',
				       'env',
				       'debug_points',
				       'error_log',
				       'log_not_found',
				       'include',
				       'lock_file',
				       'master_process',
				       'pid',
				       'ssl_engine',
				       'timer_resolution',
				       'user',
				       'worker_cpu_affinity',
				       'worker_priority',
				       'worker_processes',
				       'worker_rlimit_core',
				       'worker_rlimit_nofile',
				       'worker_rlimit_sigpending',
				       'working_directory',
				       ),
			    2 => array( // events module,
                                       'events',
				       'accept_mutex',
				       'accept_mutex_delay',
				       'debug_connection',
				       'devpoll_changes', 
				       'devpoll_events', 
				       'kqueue_changes', 
				       'kqueue_events', 
				       'epoll_events',
				       'multi_accept',
				       'rtsig_signo',
				       'rtsig_overflow_events', 
				       'rtsig_overflow_test', 
				       'rtsig_overflow_threshold',
				       'use',
				       'worker_connections',
				       ),
			    3 => array( // http module
                                       'http',
				       'alias',
				       'client_body_in_file_only',
				       'client_body_buffer_size',
				       'client_body_temp_path',
				       'client_body_timeout',
				       'client_header_buffer_size',
				       'client_header_timeout',
				       'client_max_body_size',
				       'default_type',
				       'error_page',
				       'index',
				       'internal',
				       'keepalive_timeout',
				       'keepalive_requests',
				       'large_client_header_buffers',
				       'limit_except',
				       'limit_rate',
				       'limit_rate_after',
				       'listen',
				       'location',
				       'msie_padding',
				       'msie_refresh',
				       'optimize_server_names',
				       'port_in_redirect',
				       'recursive_error_pages',
				       'root',
				       'satisfy_any',
				       'send_timeout',
				       'sendfile',
				       'server',
				       'server_name',
				       'server_name_in_redirect',
				       'server_names_hash_max_size',
				       'server_names_hash_bucket_size',
				       'server_tokens',
				       'tcp_nodelay',
				       'tcp_nopush',
				       'try_files',
				       'types',
				       ),
			    4 => array( // upstream module
				       'ip_hash',
				       'server',
				       'upstream',
				       ),
			    5 => array( // access module
				       'deny', 
				       'allow'
				       ),
			    6 => array( // auth basic module
				       'auth_basic', 
				       'auth_basic_user_file'
				       ),
			    7 => array( // auto index module
				       'autoindex',
				       'autoindex_exact_size',
				       'autoindex_localtime',
				       ),
			    8 => array( // browser module
				       'ancient_browser',
				       'ancient_browser_value',
				       'modern_browser',
				       'modern_browser_value',
				       ),
			    9 => array( // charset module
				       'charset',
				       'charset_map',
				       'override_charset',
				       'source_charset',
				       ),
			    10 => array( // empty gif module
				       'empty_gif',
				       ),
			    11 => array( // fastcgi module
					'fastcgi_cache_path',
					'fastcgi_cache',
					'fastcgi_cache_methods',
					'fastcgi_cache_min_uses',
					'fastcgi_cache_use_stale',
					'fastcgi_cache_valid',
					'fastcgi_index',
					'fastcgi_hide_header',
					'fastcgi_ignore_client_abort',
					'fastcgi_intercept_errors',
					'fastcgi_param',
					'fastcgi_pass',
					'fastcgi_pass_header',
					'fastcgi_read_timeout',
					'fastcgi_redirect_errors',
					'fastcgi_split_path_info',
					'fastcgi_store',
					'fastcgi_store_access',
					'fastcgi_buffers',
					'fastcgi_buffer_size',
					'fastcgi_temp_path',				      
				       ),
			    12 => array( // geoip module
				       'geo'
				       ),
			    13 => array( // gzip module
					'gzip',
					'gzip_buffers',
					'gzip_comp_level',
					'gzip_disable',
					'gzip_http_version',
					'gzip_min_length',
					'gzip_proxied',
					'gzip_types',
					'gzip_vary',
				       ),
			    14 => array( // headers module
					'add_header',
					'expires',
				       ),
			    15 => array( // index module
					'index',
				       ),
			    16 => array( // referer module
					'valid_referers',
				       ),
			    17 => array( // limit zone module
					'limit_zone',
					'limit_conn',
				       ),
			    18 => array( // log module
					'access_log',
					'log_format',
					'log_format_combined',
					'open_log_file_cache',
				       ),
			    19 => array( // map module
					'map',
					'map_hash_max_size',
					'map_hash_bucket_size',
				       ),
			    20 => array( // memcached module
					'memcached_pass',
					'memcached_connect_timeout',
					'memcached_read_timeout',
					'memcached_send_timeout',
					'memcached_buffer_size',
					'memcached_next_upstream',
				       ),
			    21 => array( // proxy module
					'proxy_buffer_size',
					'proxy_buffering',
					'proxy_buffers',
					'proxy_busy_buffers_size',
					'proxy_cache',
					'proxy_cache_path',
					'proxy_cache_methods',
					'proxy_cache_min_uses',
					'proxy_cache_valid',
					'proxy_cache_use_stale',
					'proxy_connect_timeout',
					'proxy_headers_hash_bucket_size',
					'proxy_headers_hash_max_size',
					'proxy_hide_header',
					'proxy_ignore_client_abort',
					'proxy_intercept_errors',
					'proxy_max_temp_file_size',
					'proxy_method',
					'proxy_next_upstream',
					'proxy_pass',
					'proxy_pass_header',
					'proxy_pass_request_body',
					'proxy_pass_request_headers',
					'proxy_redirect',
					'proxy_read_timeout',
					'proxy_redirect_errors',
					'proxy_send_lowat',
					'proxy_send_timeout',
					'proxy_set_body',
					'proxy_set_header',
					'proxy_store',
					'proxy_store_access',
					'proxy_temp_file_write_size',
					'proxy_temp_path',
					'proxy_upstream_fail_timeout',
					'proxy_upstream_max_fails',
				       ),
			    22 => array( // rewrite module
					'break',
					'if',
					'return',
					'rewrite',
					'set',
					'uninitialized_variable_warn',
				       ),
			    23 => array( // ssi module
					'ssi',
					'ssi_silent_errors',
					'ssi_types',
					'ssi_value_length',
				       ),
			    24 => array( // user id module
					'userid',
					'userid_domain',
					'userid_expires',
					'userid_name',
					'userid_p3p',
					'userid_path',
					'userid_service',
				       ),

			    25 => array( // NginxHttpAdditionModule
				      'add_before_body',
				      'add_after_body',
				      ),
			    26 => array( // NginxEmbeddedPerlModule
				      'perl',
				      'perl_modules',
				      'perl_require',
				      'perl_set',
				      ),
			    27 => array( // NginxHttpFlvStreamModule
				      'flv',
				      ),
			    28 => array( // NginxHttpGzipStaticModule
				      'gzip_static',
				      'gzip_http_version',
				      'gzip_proxied',
				      'gzip_disable',
				      'gzip_vary',
				      ),
			    29 => array( // NginxHttpRandomIndexModule
				      'random_index',
				      ),
			    30 => array( // NginxHttpRealIpModule
				      'set_real_ip_from',
				      'real_ip_header',
				      ),
			    31 => array( // NginxHttpSslModule
				      'ssl',
				      'ssl_certificate',
				      'ssl_certificate_key',
				      'ssl_client_certificate',
				      'ssl_dhparam',
				      'ssl_ciphers',
				      'ssl_prefer_server_ciphers',
				      'ssl_protocols',
				      'ssl_verify_client',
				      'ssl_verify_depth',
				      'ssl_session_cache',
				      'ssl_session_timeout',
				      'ssl_engine',
				      ),
			    32 => array( // NginxHttpStubStatusModule
				      'stub_status',
				      ),
			    33 => array( // NginxHttpSubModule
				      'sub_filter',
				      'sub_filter_once',
				      'sub_filter_types',
				      ),
			    34 => array( // NginxHttpDavModule
				      'dav_access',
				      'dav_methods',
				      'create_full_put_path',
				      ),
			    35 => array( // NginxGooglePerftoolsModule
				      'google_perftools_profiles',
				      ),
			    36 => array( // NginxHttpXsltModule
				      'xslt_entities',
				      'xslt_stylesheet',
				      'xslt_types',
				      ),
                            37 => array( // NginxHttpUwsgiModule
					'uwsgi_pass',
					),

			    ),
	'SYMBOLS' => array(
			   '(', ')', '{', '}', '=', '~', ';'
			   ),
	'CASE_SENSITIVE' => array(
				  GESHI_COMMENTS => true,
				  1 => true,
				  2 => true,
				  3 => true,
				  4 => true,
				  5 => true,
				  ),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #b1b100;',
			2 => 'color: #000000; font-weight: bold;',
			3 => 'color: #000066;',
			4 => 'color: #993333;'
			),
		'COMMENTS' => array(
			1 => 'color: #808080; font-style: italic;',
			2 => 'color: #339933;',
			'MULTI' => 'color: #808080; font-style: italic;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #66cc66;'
			),
		'STRINGS' => array(
			0 => 'color: #ff0000;'
			),
		'NUMBERS' => array(
			),
		'METHODS' => array(
			1 => 'color: #202020;',
			2 => 'color: #202020;'
			),
		'SYMBOLS' => array(
			0 => 'color: #66cc66;'
			),
		'REGEXPS' => array(
			),
		'SCRIPT' => array(
			)
		),
	'URLS' => array(
		1 => '/NginxHttpMainModule#{FNAME}',
		2 => '/NginxHttpEventsModule#{FNAME}',
		3 => '/NginxHttpCoreModule#{FNAME}',
		4 => '/NginxHttpUpstreamModule#{FNAME}',
		5 => '/NginxHttpAccessModule#{FNAME}',
		6 => '/NginxHttpAuthBasicModule#{FNAME}',
		7 => '/NginxHttpAutoIndexModule#{FNAME}',
		8 => '/NginxHttpBrowserModule#{FNAME}',
		9 => '/NginxHttpCharsetModule#{FNAME}',
		10 => '/NginxHttpEmptyGifModule#{FNAME}',
		11 => '/NginxHttpFcgiModule#{FNAME}',
		12 => '/NginxHttpGeoModule#{FNAME}',
		13 => '/NginxHttpGzipModule#{FNAME}',
		14 => '/NginxHttpHeadersModule#{FNAME}',
		15 => '/NginxHttpIndexModule#{FNAME}',
		16 => '/NginxHttpRefererModule#{FNAME}',
		17 => '/NginxHttpLimitZoneModule#{FNAME}',
		18 => '/NginxHttpLogModule#{FNAME}',
       		19 => '/NginxHttpMapModule#{FNAME}',
                20 => '/NginxHttpMemcachedModule#{FNAME}',
		21 => '/NginxHttpProxyModule#{FNAME}',
		22 => '/NginxHttpRewriteModule#{FNAME}',
		23 => '/NginxHttpSsiModule#{FNAME}',
		24 => '/NginxHttpUserIdModule#{FNAME}',
		25 => '/NginxHttpAdditionModule#{FNAME}',
		26 => '/NginxHttpEmbeddedPerlModule#{FNAME}',
		27 => '/NginxHttpFlvStreamModule#{FNAME}',
		28 => '/NginxHttpGzipStaticModule#{FNAME}',
		29 => '/NginxHttpRandomIndexModule#{FNAME}',
		30 => '/NginxHttpRealIpModule#{FNAME}',
		31 => '/NginxHttpSslModule#{FNAME}',
		32 => '/NginxHttpStubStatusModule#{FNAME}',
		33 => '/NginxHttpSubModule#{FNAME}',
		34 => '/NginxHttpDavModule#{FNAME}',
		35 => '/NginxHttpGooglePerfToolsModule#{FNAME}',
		36 => '/NginxHttpXsltModule#{FNAME}',
		37 => '/NginxHttpUwsgiModule#{FNAME}'
		),
	'OOLANG' => false,
	'OBJECT_SPLITTERS' => array(
		),
	'REGEXPS' => array(
		0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*',
		4 => '&lt;[a-zA-Z_][a-zA-Z0-9_]*&gt;',
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array(
		),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		)
);

?>
