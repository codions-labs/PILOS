import RoomTypePolicy from '../../../resources/js/policies/RoomTypePolicy';

describe('RoomTypePolicy', function () {
  it('viewAny always returns true', function () {
    expect(RoomTypePolicy.viewAny({ currentUser: { permissions: [] } })).toBe(true);
  });

  it('view returns true if the user has the permission to view room types', function () {
    expect(RoomTypePolicy.view({ currentUser: { permissions: [] } })).toBe(false);
    expect(RoomTypePolicy.view({ currentUser: { permissions: ['roomTypes.view'] } })).toBe(true);
  });

  it('create returns true if the user has the permission to create room types', function () {
    expect(RoomTypePolicy.create({ currentUser: { permissions: [] } })).toBe(false);
    expect(RoomTypePolicy.create({ currentUser: { permissions: ['roomTypes.create'] } })).toBe(true);
  });

  it('update returns true if the user has the permission to update room types', function () {
    expect(RoomTypePolicy.update({ currentUser: { permissions: [] } }))
      .toBe(false);
    expect(RoomTypePolicy.update({ currentUser: { permissions: ['roomTypes.update'] } }))
      .toBe(true);
  });

  it('delete returns true if the user has the permission to delete room types', function () {
    expect(RoomTypePolicy.delete({ currentUser: { permissions: [] } }))
      .toBe(false);
    expect(RoomTypePolicy.delete({ currentUser: { permissions: ['roomTypes.delete'] } }))
      .toBe(true);
  });
});
