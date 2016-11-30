:- begin_tests(lists).
:- use_module(library(lists)).

test(reverse) :-
        reverse([a,b], [b,a]).

test(a) :-
        A is 2^3,
        assertion(integer(A)),
        assertion(A == 8).

:- end_tests(lists).

:-    run_tests.