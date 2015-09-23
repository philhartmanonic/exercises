from sympy import *
from mpmath import *
n = raw_input('> ')
n = int(float(n))
pn = N(pi, n)
print "Pi with %r digits = %r" % (n, pn)
en = N(e, n)
print "e with %r digits = %r" % (n, en)
phin = N(phi, n)
print "The golden ratio with %r digits = %r" % (n, phin)
