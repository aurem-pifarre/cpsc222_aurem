#!/usr/bin/perl

use strict;
use warnings;

#using the journalctl command to find how many sudo sessions and counting them
my $journal = 'journalctl _SYSTEMD_UNIT=sudo.service | grep "COMMAND=/usr/bin/sudo" | grep "sudo:session" ';
my $result = '$journal';

my @split_lines = split(/\n/, $result); #splitting the lines
my $counter = scalar @split_lines;	#counting how many lines

print "$count\n";


