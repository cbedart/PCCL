# Pan-Canadian Chemical Library

This GitHub repository contains all information related to the Pan-Canadian Chemical Library (PCCL) project. For more information, visit <https://pccl.thesgc.org>.

## Citation

If you find the PCCL useful or if you use it, please cite our paper:

XXXXXXX

## Reagents and chemical reactions information

Inclusion and exclusion rules, as well as encoded chemical reactions, can be found in SMARTS format in the “PCCL_reactions” section.

### Files XXXX_Reagents.txt

-   Synthon SMARTS with a Synthon ID for each type of reagents used.
-   Global exclusion SMARTS filters.
-   Synthon-specific exclusion SMARTS filters for each Synthon ID.
-   Reaction tags for each Synthon ID.

### Files XXXX_Reactions.txt

-   Chemical reactions SMARTS.
-   Mapping of the chemical reactions using the reactions tags for each Synthon ID (as an example, a mapping “AB” will use the synthons defined with the letters A and B in the XXXX_Reagents.txt file).

## Website  
The source code used for the <https://pccl.thesgc.org> website can be found in the “PCCL_website” section. This website also uses PostgreSQL functionalities as well as the [RDKit database cartridge](https://www.rdkit.org/docs/Cartridge.html).
