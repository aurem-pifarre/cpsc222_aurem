#!/usr/bin/perl

use strict;
use warnings;
use SNMP;

my $count = 0;
open(my $file, '<', '/var/log/auth.log') or die $!;
while (my $line = <$file>){
	if ($line =~ m/sudo:session/ && $line =~ m/opened/){ 
	 $count++;
	}
}
close($file);
print "$count";
