vendor_bin=vendor/bin
bin=bin
src=src
examples=examples
dirs=$(src) $(examples)
phpcs_params:=--standard=codesniffer-ruleset.xml --extensions=php,phpt --ignore=$(temp),log $(dirs)


lint:
	${vendor_bin}/parallel-lint $(dirs)

phpcs:
	$(vendor_bin)/phpcs -sp $(phpcs_params)

phpcbf:
	$(vendor_bin)/phpcbf -spn $(phpcs_params) ; true

phpstan:
	$(vendor_bin)/phpstan analyze $(dirs)


fix: lint phpcbf phpcs phpstan

di:
	$(bin)/extract-services