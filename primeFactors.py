n = raw_input('> ')
n = int(float(n))
factors = []
settled = []
counter = 0
primes = []
for i in range(2, n):
    if n % i == 0:
        factors.append(i)
if len(factors) == 0:
    print "There are no prime factors"
else:
    for i in range(2, n):
        prime = True
        for j in range(2, i):
            if i % j == 0 and i != j:
                prime = False
                break
        if prime == True:
            primes.append(i)
    for i in factors:
        if i in primes:
            settled.append(i)
    print "The prime factors are %r" % ', '.join(str(x) for x in settled)
