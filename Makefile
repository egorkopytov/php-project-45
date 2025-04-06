install:
	composer instal
brain-games:
	@./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
newbrain-even:
	./src/newbrain-even
brain-progression:
	./bin/brain-progression
brain-prime:
	./bin/brain-prime