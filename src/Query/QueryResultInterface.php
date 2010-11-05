<?php
declare(ENCODING = 'utf-8');
namespace PHPCR\Query;

/*                                                                        *
 * This file was ported from the Java JCR API to PHP by                   *
 * Karsten Dambekalns <karsten@typo3.org> for the FLOW3 project.          *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version. Alternatively, you may use the Simplified   *
 * BSD License.                                                           *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * A QueryResult object. Returned by Query->execute().
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface QueryResultInterface {

    /**
     * Returns an array of all the column names in the table view of this result set.
     *
     * @return array array holding the column names.
     * @throws \PHPCR\RepositoryException if an error occurs.
     * @api
     */
    public function getColumnNames();

    /**
     * Returns an iterator over the Rows of the result table. The rows are
     * returned according to the ordering specified in the query.
     *
     * @return \PHPCR\Query\RowIteratorInterface a RowIterator
     * @throws \PHPCR\RepositoryException if this call is the second time either getRows() or getNodes() has been called on the same QueryResult object or if another error occurs.
     * @api
    */
    public function getRows();

    /**
     * Returns an iterator over all nodes that match the query. The nodes are
     * returned according to the ordering specified in the query.
     *
     * @return \PHPCR\NodeIteratorInterface a NodeIterator
     * @throws \PHPCR\RepositoryException if the query contains more than one selector, if this call is the second time either getRows() or getNodes() has been called on the same QueryResult object or if another error occurs.
     * @api
     */
    public function getNodes();

    /**
     * Returns an array of all the selector names that were used in the query
     * that created this result. If the query did not have a selector name then
     * an empty array is returned.
     *
     * @return array a String array holding the selector names.
     * @throws \PHPCR\RepositoryException if an error occurs.
     * @api
     */
    public function getSelectorNames();

}
