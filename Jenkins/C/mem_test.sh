echo "checking for memory leaks . . ."
valgrind --tool=memcheck --leak-check=yes ./Jenkins/C/example1
