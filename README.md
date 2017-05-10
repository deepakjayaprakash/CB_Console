# CB Console for Partner Login

The portal is built for the partners of the company to login and use features such as:
- IOPS/ Throughput Calcualtor
- Quote/ Billing of Materials(BOM) Generation
- News Updates
- Dashboard

## IOPS/ Throughput Calcuator

The application takes in input configuration from the user and prints statistics which help users tune the Disk/ RAID configuration

#### Input Paramters: {DiskType, RAIDType, UsableCapcity}

#### Output Statistics:
- IOPS: {Number of vdevs, WritePercentageforStdIOPS, StdIOPS with Zil, StdIOPS with L2ARC, StdIOPS with MetaCache}
- DiskParamters: {Total number of data disks, Total number of usable disks, Total number of parity disks, Usable capacity (TB), Raw capacity, Number of spares, Number of JBODS}
- Throughput: {Throughput, Throughput With Read Cache, Throughput With Write Cache, Throughput With MetaCache, Throughput With All three}

## Quote/ Billing of Materials(BOM) Generation

This application is a Price Calculator for Cloud Application. The entered configuration is taken up and an overall estimate about the quote is generated in the required format.

#### The application takes in the following input paramters:

- Customer Info : {CompanyName, CustomerContact, OrderDescription, DeliverAddress}
- Order specifications= {DiskType, RAIDType, UsableCapcity,Number of controllers required,Number of JBODS required,isZilRequired, isReadCacheRequired, isMetaCacheRequired,Number of Data Disks required, Number of SAS Cables required } 

#### Output Statistics:

- Output= {Per Unit cost of each quantity, total cost, Total HW cost, HW support cost per year after 4th year, Total SW cost, SW support cost per year after 2nd year, Cost per GB per month per year }