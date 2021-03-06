/**
 * Policy for server pool actions
 */
export default {
  /**
   * Returns a boolean that indicates whether the user can view all server pools or not.
   *
   * @param permissionService
   * @return {boolean}
   */
  viewAny (permissionService) {
    return !permissionService.currentUser ? false : permissionService.currentUser.permissions.includes('serverPools.viewAny');
  },

  /**
   * Returns a boolean that indicates whether the user can create server pools or not.
   *
   * @param permissionService
   * @return {boolean}
   */
  create (permissionService) {
    return !permissionService.currentUser ? false : permissionService.currentUser.permissions.includes('serverPools.create');
  },

  /**
   * Returns a boolean that indicates whether the user can view server pool or not.
   *
   * @param permissionService
   * @return {boolean}
   */
  view (permissionService) {
    return !permissionService.currentUser ? false : permissionService.currentUser.permissions.includes('serverPools.view');
  },

  /**
   * Returns a boolean that indicates whether the user can update the passed server pool or not.
   *
   * @param permissionService
   * @return {boolean}
   */
  update (permissionService) {
    return !permissionService.currentUser ? false : permissionService.currentUser.permissions.includes('serverPools.update');
  },

  /**
   * Returns a boolean that indicates whether the user can delete the passed server pool or not.
   *
   * @param permissionService
   * @return {boolean}
   */
  delete (permissionService) {
    return !permissionService.currentUser ? false : permissionService.currentUser.permissions.includes('serverPools.delete');
  }
};
