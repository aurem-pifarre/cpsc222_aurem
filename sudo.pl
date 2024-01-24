#!/usr/bin/perl

use strict;
use warnings;

my $count = 0;
open(my $file, '<', '/var/log/auth.log') or die $!;
while (my $line = <$file>){
	if ($line =~ /sudo:sessions/ && $line =~/opened/) 
	scalar $count++;
	}
}
close($file);
print "$count\n";


