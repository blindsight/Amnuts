#ifndef HAVE_AMNUTS_PHP_HPP
#define HAVE_AMNUTS_PHP_HPP

#include <php.h>
#include <SAPI.h>
#include <php_main.h>
#include <php_variables.h>
#include <php_ini.h>
#include <zend_ini.h>
#include <signal.h>

bool amnuts_php_initialize();
void amnuts_php_finalize();

/* All "*len" arguments are length including NUL (strlen() + 1)*/
void amnuts_php_set_string(const char *name, const char *value, size_t name_len, size_t value_len);
char *amnuts_php_get_string(const char *name, char *value, size_t name_len);

/* Some macros taking advantage of knowing length of string at compile time */
#define AMNUTS_PHP_SET_STRINGL(name, value) \
    amnuts_php_set_string(name, value, sizeof(name), 0)

#define AMNUTS_PHP_SET_STRINGLL(name, value) \
    amnuts_php_set_string(name, value, sizeof(name), sizeof(value) - 1)

#define AMNUTS_PHP_GET_STRINGL(name, value) \
    amnuts_php_get_string(name, value, sizeof(name))

bool amnuts_php_eval(const char *source, const char *code);
bool amnuts_php_evalf(const char *source, const char *fmt, ...) __attribute__ ((format (printf, 2, 3)));

#endif
