# Algorithms-PHP
This repo contains implementations of Algorithms from Robert Sedgewicks course:Algorithm 1 on coursera using PHP.

## Algorithms

### Union Find
There  are 4 implementations of this algorithm here:
  - Quick Find
  - Quick Union
  - Weighted QuickUnion
  - Weighted Quick Union With Path Compression
 To run the implementations against the sample inputs provided. Run a command like this:
```shell
php -f unionfind.php QuickUnion < data/uf/tinyUF.txt
```
`QuickUnion` is the name of the algorithm. Other options are `UnionFind`, `WeightedQuickUnion`, `WQUWPathCompression` .
There are 3 input files: `tinyUF.txt`, `mediumUF.txt` and `largeUF.txt` all located in `data/uf/` folder