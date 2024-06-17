# Pan-Canadian Chemical Library

This GitHub repository contains all information related to the Pan-Canadian Chemical Library (PCCL) project. For more information, visit <https://pccl.thesgc.org>.

## Citation

If you find the PCCL useful or if you use it, please cite our paper:

Bedart, C. *et al.* The Pan-Canadian Chemical Library: A mechanism to open academic chemistry to high-throughput virtual screening. Scientific Data 11, (2024).
doi:[10.1038/s41597-024-03443-5](https://www.nature.com/articles/s41597-024-03443-5)
  

## Reagents and chemical reactions information

Inclusion and exclusion rules, as well as encoded chemical reactions, can be found in SMARTS format in the “PCCL_reactions” section.

### Files XXXX_Reagents.txt

-   Synthon SMARTS with a Synthon ID for each type of reagent used.
-   Global exclusion SMARTS filters.
-   Synthon-specific exclusion SMARTS filters for each Synthon ID.
-   Reaction tags for each Synthon ID.

### Files XXXX_Reactions.txt

-   Chemical reaction SMARTS.
-   Mapping of the chemical reactions using the reaction tags for each Synthon ID (as an example, a mapping “AB” will use the synthons defined with the letters A and B in the XXXX_Reagents.txt file).

## Website  
The source code used for the <https://pccl.thesgc.org> website can be found in the “PCCL_website” section. This website also uses PostgreSQL functionalities as well as the [RDKit database cartridge](https://www.rdkit.org/docs/Cartridge.html).


## 127m cheap/druglike subset of the Pan-Canadian Chemical Library
All the compounds can be found on Zenodo at <https://zenodo.org/records/11371919>

